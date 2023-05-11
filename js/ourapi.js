// ourapi.js
// get references to the search button, search input, and results container
const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");
const resultsapi = document.getElementById("resultsAPI");

// add an event listener to the search button that executes when it's clicked
searchButton.addEventListener
("click", () => {
    const artistId = searchInput.value.trim();
    if (artistId !== "") {    
      // Kyle location of file
      // fetch(`http://localhost/dashboard/MusicAPI-TeamProject/OUR_API/album/read.php?ArtistID=${artistId}`)
      // Sudath location of file
      fetch(`http://localhost/MusicAPI-TeamProject/OUR_API/album/read.php?ArtistID=${artistId}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          // convert the response to JSON format
          return response.json();
        })
        .then((data) => 
        {
          //sorts data
          data.album.sort(function(a, b){return b.Sales - a.Sales});
          console.log(data); // log the data to the console for debugging purposes
  
          // check if data is null or empty
          if (data === null || data.album === null || data.album.length === 0) {
            resultsapi.innerHTML = "No results found";
            return;
          }
          
          // display the artist information in the resultsapi container
          const artist = data.album[0];
          resultsapi.innerHTML = `
          <div class="artist-result">
            <h2 class="artist-resultAlbum">Album: ${artist.Album}</h2>
            <p class="artist-resultReleased">Released: ${artist.Released}</p>
            <p class="artist-resultSales">Sales: ${artist.Sales}</p>
          </div> `;
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    }

  });

