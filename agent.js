Vue.config.devtools = true;
new Vue({
	el:'#root',
	data:{
		agent_id:document.getElementById('agent_id').value,
		agent:{},
		properties:[],
		active_status:true,
		pending_status:false,
		active_counter:0,
		pending_counter:0,
		agent_form:{
			full_name:'',
			phone:'',
			email:'',
			question:''
		}
	},
	created: function(){
		this.loadAgent();
	},
	methods:{
		loadAgent: function(){
			axios.get('http://portal.theoffercompany.com/api/getAgentDetails.php?id='+this.agent_id)
			.then(response=>{
				this.agent = response.data;
				// console.log(response.data);
				axios.get('http://portal.theoffercompany.com/api/getAgentsMls.php?id='+this.agent.mls_id)
				.then(response2 =>{
					this.properties = response2.data;
					this.active_counter = response2.data.length;
					axios.get('http://portal.theoffercompany.com/api/getAgentsMls.php?pending=1&id='+this.agent.mls_id)
					.then(response3=>{
						this.pending_counter = response3.data.length;
					});
				})
				.catch(error=>{
					console.log(error);
				});
			});
		},
		getProperties: function(pending){
			if(pending == 1){
				this.active_status = false;
				this.pending_status = true;
			}else{
				this.active_status = true;
				this.pending_status = false;
			}
				axios.get('http://portal.theoffercompany.com/api/getAgentsMls.php?pending='+pending+'&id='+this.agent.mls_id)
				.then(response2 =>{
					this.properties = response2.data;
					console.log(response2.data);
					console.log(response2.data.length);
				})
				.catch(error=>{
					console.log(error);
				});
			
		},
		zapAgent: function(){
			axios.post('http://l8u.9b2.myftpupload.com/wp-content/themes/theoffercompany/ajax_agent_profile.php', {
	            agent_id:this.agent_id,
	            full_name: this.agent_form.full_name,
	            phone: this.agent_form.phone,
	            email: this.agent_form.email,
	            question: this.agent_form.question  
	        })
	        .then(res => {
	             console.log(res)
	        })
	        .catch(error => {
	             console.log(error)
	        });
	        this.agent_form.full_name = '';
	        this.agent_form.phone = '';
	        this.agent_form.email = '';
	        this.agent_form.question = '';
	        
		}
	}
})