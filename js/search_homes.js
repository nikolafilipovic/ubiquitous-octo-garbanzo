function SearchPage() {
	this.search_endpoint = "https://portal.theoffercompany.com/api/getMlsResults.php";
	this.property_template = `
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 column-item">
			<div class="property-item" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 42%, #000000b8 100%), url( {IMAGE} )">
				<span class="time-on-market"><i class="fal fa-vr-cardboard"></i>{TIME_ON_MARKET} on the market</span>
				<a href="#" class="favourite"><i class=" far fa-heart"></i></a>
				<span class="sale-type"><i class="red-dot"></i>House for Sale</span>
				<h1 class="property-price">{PRICE}</h1>
				<div class="property-info">
					<span class="beds">{BEDS}</span><i class="fas fa-circle"></i>
					<span class="baths">{BATHS}</span><i class="fas fa-circle"></i>
					<span class="sqft">{AREA}</span>
				</div>
				<span class="property-address">{ADDRESS}</span>    
			</div>
		</div>
	`;
}

SearchPage.prototype.fillPropertyTemplate = function( property ) {
	let html = this.property_template;
	let image = property.photos[0] || "";
		html.replace( "{IMAGE}", image );
	let time_on_market = property.mls_daysOnMarket || "unknown days";
		html.replace( "{TIME_ON_MARKET}", time_on_market );
	let price = "$" + property.listPrice || "";
		html.replace( "{PRICE}", price );
	let beds = property.property_bedrooms + " beds" || "";
		html.replace( "{BEDS}", beds );
	let full_baths = property.property_bathsFull || 0;
	let half_baths = property.property_bathsHalf || 0;
	let baths = ( half_baths ) ? full_baths + "." + half_baths : full_baths;
		baths += " baths";
		html.replace( "{BATHS}", baths );
	let area = property.property_area || "";
		html.replace( "{AREA}", area );
	let address = property.address_full + " " + property.address_state + " " + property.address_postalCode;
		html.replace( "{ADDRESS}", address );
};

SearchPage.prototype.getSearchResults = function() {
	
	return new Promise( ( resolve, reject ) => {
		$.ajax({
			type: "POST",
			url: this.search_endpoint,
			data: {
				q: [
					[ "property_roof", "LIKE", "Comp" ],
				],
			},
			success: function( response ) {
				console.log( "response", response );
			},
			error: function( error ) {
				console.log( "error", error );
			},
			dataType: "json",
		});
	});
};

let a = new SearchPage();
	a.getSearchResults()
		//.updateSearchView();