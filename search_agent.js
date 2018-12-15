new Vue({
	el:'#root',
	data:{
		zip:'',
	},
	methods: {
		getAgentId : function(){
			axios.get('http://portal.theoffercompany.com/api/getAgentDetails.php?zip='+this.zip)
			.then(response =>{
				data = response.data[0];
				console.log(data);
				if(response.data.length == 0){
					// alert('no agent assigned for the area');
					this.zip='';
					toastr.error('no agent assigned for the area','Ooops');
				}else{
					window.location="http://l8u.9b2.myftpupload.com/agent-profile/?id="+data.id;
				}
			})
			.catch(function (error) {
			    console.log(error);
			    alert('Oops');
			    this.zip = '';
			})
		}
	}
});