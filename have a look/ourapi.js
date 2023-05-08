// // get references to the search button, search input, and results container
// const searchButton = document.getElementById("search-button");
// const searchInput = document.getElementById("search-input");
// const resultsapi = document.getElementById("resultsAPI");

// // add an event listener to the search button that executes when it's clicked
// searchButton.addEventListener("click", () => {
//     const artistId = searchInput.value.trim();
//     if (artistId !== "") {
//       fetch(`http://localhost/dashboard/MusicAPI-TeamProject/Our_API/album/read.php?ArtistID=${artistId}`)
//         .then((response) => {
//           if (!response.ok) {
//             throw new Error("Network response was not ok");
//           }
//           // convert the response to JSON format
//           return response.json();
//         })
//         .then((data) => 
//         {
//           console.log(data); // log the data to the console for debugging purposes
  
//           // check if data is null or empty
//           if (data === null || data.artists === null || data.artists.length === 0) {
//             resultsapi.innerHTML = "No results found";
//             return;
//           }
          
//           // display the artist information in the resultsapi container
//           const artist = data.artists[0];
//           data.sort(function(a, b){return a - b});
//           resultsapi.innerHTML = `
//             <h2>${artist.Album}</h2>
//             <p>${artist.Released}</p>
//             <p>${artist.Sales}</p>
//           `;
//         })
//         .catch((error) => {
//           console.error("Error fetching data:", error);
//         });
//     }


//   });