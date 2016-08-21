	function showUserPosition() {
		if (navigator.geolocation) {
		  var timeoutVal = 10 * 1000 * 1000;
		  navigator.geolocation.getCurrentPosition(
		    initMap, 
		    displayError,
		    { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
		  );
		}
		else {
		  alert("Geolocation is not supported by this browser");
		}
	}

	function displayError(error) {
	  var errors = { 
	    1: 'Permission denied',
	    2: 'Position unavailable',
	    3: 'Request timeout'
	  };
	  alert("Error: " + errors[error.code]);
	}

	
