import React, { useState, useEffect } from "react";

import SearchForm from "./SearchForm.jsx";
import Ship from "./Ship.jsx";

const App = () => {
  const [query, setQuery] = useState("");
  const [results, setResults] = useState([]);
  const [searchResults, setSearchResults] = useState([]);

  const fetchData = () => {
    fetch(`http://127.0.0.1:8000/api/data`)
      .then((response) => response.json())
      .then((data) => setResults(data.results))
      .catch((error) => console.log(error));

    console.log(results);
  };

  useEffect(() => {
    if(query.length > 0){
    setSearchResults(results.filter(function(ship){return ship.name.match(query)}))
    }
    if(query.length === 0){
        setSearchResults(results);
    }
  }, [query]);

  useEffect(() => {
    setSearchResults(results);
  }, [results]);

  useEffect(() => {
    fetchData();
  }, []);

  return (
    <div className="app text-white">
      <h1>Find A Star Wars Ship</h1>

      <SearchForm query={query} setQuery={setQuery} />


<div classname="relative overflow-x-auto text-white">
    <table class="w-full text-sm text-left text-white">
        <thead classname="text-xs uppercase text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Ship Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Ship Model
                </th>
                <th scope="col" class="px-6 py-3">
                    Ship Maufacture
                </th>
                <th scope="col" class="px-6 py-3">
                    Add to favorites
                </th>
            </tr>
        </thead>
        <tbody>


      {searchResults.map((result) => (
        <Ship
          key={result.name}
          name={result.name}
          model={result.model}
          manufacturer={result.manufacturer}
        />
      ))}
              </tbody>
    </table>
</div>

    </div>
  );
};

export default App;
