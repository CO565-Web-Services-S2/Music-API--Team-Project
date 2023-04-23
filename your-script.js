// fetch("https://theaudiodb.com/api/v1/json/2/artist.php?i=112024")
//   .then(response => response.json())
//   .then(data => {
//     const artistName = data.artists[0].strArtist;
//     const artistBio = data.artists[0].strBiographyEN;

//     // Find the HTML elements you want to modify
//     const artistNameElement = document.querySelector("#artist-name");
//     const artistBioElement = document.querySelector("#artist-bio");

//     // Modify the contents of the elements
//     artistNameElement.innerHTML = artistName;
//     artistBioElement.innerHTML = artistBio;
//   })
//   .catch(error => console.error(error));
//////////////////////////////////////////////////////////////////////////////////////////////////
// const searchButton = document.getElementById("search-button");
// const searchInput = document.getElementById("search-input");
// const resultsContainer = document.getElementById("results-container");

// searchButton.addEventListener("click", () => {
//   const searchTerm = searchInput.value.trim().toLowerCase();
//   if (searchTerm !== "") {
//     fetch(`https://theaudiodb.com/api/v1/json/2/artist.php?i=${searchTerm}`)
//       .then((response) => {
//         if (!response.ok) {
//           throw new Error("Network response was not ok");
//         }
//         return response.json();
//       })
//       .then((data) => {
//         console.log(data); // log the data to the console for debugging purposes

//         // check if data is null or empty
//         if (data === null || data.artists === null || data.artists.length === 0) {
//           resultsContainer.innerHTML = "No results found";
//           return;
//         }

//         // display the artist information in the results container
//         const artist = data.artists[0];
//         resultsContainer.innerHTML = `
//           <h2>${artist.strArtist}</h2>
//           <img src="${artist.strArtistThumb}" alt="${artist.strArtist}">
//           <p>${artist.strBiographyEN}</p>
//         `;
//       })
//       .catch((error) => {
//         console.error("Error fetching data:", error);
//       });
//   }
// });
const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");
const resultsContainer = document.getElementById("results-container");

searchButton.addEventListener("click", () => {
    const artistId = searchInput.value.trim();
    if (artistId !== "") {
      fetch(`https://theaudiodb.com/api/v1/json/2/artist.php?i=${artistId}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
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