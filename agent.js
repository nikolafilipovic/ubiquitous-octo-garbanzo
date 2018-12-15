new Vue({
	el:'#root',
	data:{
		agent_id:document.getElementById('agent_id').value,
		agent:{},
		properties:[]
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
					console.log('my mls');
					console.log(response2.data);
					this.properties = response2.data;
				})
				.catch(error=>{
					console.log(error);
				});
			});
		}
	}
})