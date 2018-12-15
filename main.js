
    new Vue({
        el:"#root",
        data:{
            zip: document.getElementById('zip_id').value,
            img0:'',
            img1:'',
            img2:'',
            img3:'',
            img4:'',
            address_full:'',
            address_city:'',
            address_state:'',
            address_postalCode:'',
            property_bathrooms:'',
            property_bedrooms:'',
            property_area:'',
            property_lotDescription:'',
            property_type:'',
            property_stories:'',
            property_yearBuilt:'',
            property_pool:'',
            property_lotSize:'',
            property_garageSpaces:'',
            property_fireplaces:'',
            property_laundryFeatures:'',
            property_heating:'',
            property_roof:'',
            property_cooling:'',
            remarks:'',
            vt:'',
            tourStatus:true,
            listPrice:'',
            mls_id: document.getElementById('mls_id').value,
            agent_id:'',
            agent_firstName:'',
            agent_lastName:'',
            agent_contact_email:'',
            agent_contact_office:'',
            agent_contact_cell:'',
            mls_provider_name:'',
            office_name:'',
            office_contact_office:'',
            remarks_preview:'',
            remarks_placeholder:'',
            preview:true,
            ad_agentphone:'',
            ad_first_name:'',
            ad_last_name:'',
            ad_photo:'',
            ad_agentemail:'',
            lender_fname:'',
            lender_lname:'',
            home_insurance:0,
            home_insurance_percentage: 0.0042,
            rawListPrice:0,
            downpayment_percentage:20,
            downpayment:0,
            association_fee:0,
            pmi:0,
            include_pmi:false,
            loan_amount:0,
            hide_tax:false,
            tax_taxAnnualAmount:0,
            hoa:false
        },
        created: function(){
            this.loadMLS(this.mls_id);
            this.loadAgent();
        },
        methods: {
            loadMLS: function(mls_id){
                axios.get("http://portal.theoffercompany.com/api/getMlsDetails.php?id="+mls_id)
                .then(response => {
                    data = response.data;
                    this.img0 = data.images[0];
                    this.img1 = data.images[1];
                    this.img2 = data.images[2];
                    this.img3 = data.images[3];
                    this.img4 = data.images[4];
                    this.address_full = data.address_full;
                    this.address_city = data.address_city;
                    this.address_state = data.address_state;
                    this.address_postalCode = data.address_postalCode;
                    this.property_bedrooms = data.property_bedrooms;
                    this.property_bathrooms = data.property_bathrooms;
                    this.property_area = data.property_area;
                    this.vt = data.virtualTourUrl;
                    this.remarks = data.remarks;
                    this.listPrice = new Intl.NumberFormat( "en-US", { style: "currency", currency: "USD" }).format( data.listPrice ).replace( /\.00$/, "" );
                    this.rawListPrice = data.listPrice;
                    console.log(this.rawListPrice);
                    if (this.vt == null){
                        this.tourStatus = false;
                    }
                    this.property_type = data.property_type;
                    this.property_stories = data.property_stories;
                    this.property_yearBuilt = data.property_yearBuilt;
                    this.property_pool = data.property_pool;
                    this.property_lotSize = data.property_lotSize;
                    this.property_garageSpaces = data.property_garageSpaces;
                    this.property_fireplaces = data.property_fireplaces;
                    this.property_laundryFeatures = data.property_laundryFeatures;
                    this.property_roof = data.property_roof;
                    this.property_cooling = data.property_cooling;
                    this.property_heating = data.property_heating;
                    this.agent_id = data.agent_id;
                    this.agent_firstName = data.agent_firstName;
                    this.agent_lastName = data.agent_lastName;
                    this.agent_contact_email = data.agent_contact_email;
                    this.agent_contact_office = data.agent_contact_office;
                    this.agent_contact_cell = data.agent_contact_cell;
                    this.mls_provider_name = data.mls_provider_name;
                    this.office_name = data.office_name;
                    this.office_contact_office = data.office_contact_office;
                    this.remarks_preview = this.remarks.substring(0,500);
                    this.remarks_placeholder = this.remarks_preview;
                    this.downpayment = this.rawListPrice * (this.downpayment_percentage/100);
                    this.downpayment = this.downpayment.toFixed(2);
                    this.home_insurance = this.home_insurance_percentage * this.rawListPrice;
                    this.home_insurance = this.home_insurance.toFixed(2);
                    if (this.downpayment_percentage.toFixed(2) < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);                        
                    }                    
                    this.association_fee = data.association_fee;
                    if (this.association_fee > 0){
                        this.hoa = true;
                    }else{
                        this.hoa = false;
                    }
                    this.tax_taxAnnualAmount = data.tax_taxAnnualAmount;
                    console.log(this.tourStatus);
                    

                });

            },
            loadAgent: function(){
              axios.get("http://portal.theoffercompany.com/api/getAgentDetails.php?zip="+this.zip)
              .then(response => {
                    console.log(response.data);
                    if (response.data.length == 0){
                        console.log('no data available');
                        axios.get("http://portal.theoffercompany.com/api/getAgentDetails.php?zip=85353")
                        .then(response =>{
                            agent_data = response.data[0];
                            this.ad_first_name = agent_data.first_name;
                            this.ad_last_name = agent_data.last_name;
                            this.ad_agentphone = agent_data.phone;
                            this.ad_agentemail = agent_data.email;
                            this.ad_photo = agent_data.photo;
                            this.lender_fname = agent_data.lender_fname;
                            this.lender_lname = agent_data.lender_lname;
                            console.log('hey');
                            console.log(this.ad_agentphone);
                        });
                    }else{
                        
                        agent_data = response.data[0];
                        this.ad_first_name = agent_data.first_name;
                        this.ad_last_name = agent_data.last_name;
                        this.ad_agentphone = agent_data.phone;
                        this.ad_agentemail = agent_data.email;
                        this.ad_photo = agent_data.photo;
                        this.lender_fname = agent_data.lender_fname;
                        this.lender_lname = agent_data.lender_lname;
                        // console.log('hey');
                        // console.log(this.ad_agentphone);
                    }
              });    
            },
            redirect: function(event){
                event.preventDefault();
                window.location="/search-homes/?zip="+this.zip;
            },
            showReview: function(){
                this.preview = false;
                this.remarks_placeholder = this.remarks;
            },
            getDownPayment: function(){
                
                this.downpayment = this.rawListPrice * (this.downpayment_percentage / 100);
                this.downpayment = this.downpayment.toFixed(2);
                if (this.downpayment_percentage < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);
                        this.pmi = (this.loan_amount * 0.0075) / 12;
                        this.pmi = this.pmi.toFixed(2);
                        console.log(this.pmi);
                }else{
                    this.include_pmi = false;
                    this.pmi = 0;
                }
            },
            getDownPaymentPercentage: function(){
                this.downpayment_percentage = (this.downpayment/this.rawListPrice) * 100; 
                this.downpayment_percentage = this.downpayment_percentage.toFixed(2);
                if (this.downpayment_percentage < 20){
                        this.include_pmi = true;
                        this.loan_amount = this.rawListPrice - this.downpayment;
                        this.loan_amount = this.loan_amount.toFixed(2);
                        this.pmi = (this.loan_amount * 0.0075) / 12;
                        this.pmi = this.pmi.toFixed(2);
                        console.log(this.pmi);
                }else{
                    this.include_pmi = false;
                    this.pmi = 0;
                }
            }
        }
    });
 