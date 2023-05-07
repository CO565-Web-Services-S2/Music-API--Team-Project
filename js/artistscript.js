
// get references to the search button, search input, and results container
const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");
const resultsContainer = document.getElementById("results-container");

// add an event listener to the search button that executes when it's clicked
searchButton.addEventListener("click", () => {
    const artistId = searchInput.value.trim();
    if (artistId !== "") {
      // fetch data from the AudioDB API using the artist ID
      fetch(`https://theaudiodb.com/api/v1/json/2/artist.php?i=${artistId}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          // convert the response to JSON format
          return response.json();
        })
        .then((data) => {
          console.log(data); // log the data to the console for debugging purposes
  
          // check if data is null or empty
          if (data === null || data.artists === null || data.artists.length === 0) {
            resultsContainer.innerHTML = "No results found";
            return;
          }
  
          // display the artist information in the results container
          const artist = data.artists[0];
          resultsContainer.innerHTML = `
            <h2>${artist.strArtist}</h2>
            <img src="${artist.strArtistThumb}" alt="${artist.strArtist}">
            <p>${artist.strBiographyEN}</p>
          `;
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    }
  });