import React from "react";

const SearchForm = ({ query, setQuery }) => {
  // handle input text
  const handleTextInput = (e) => {
    setQuery(e.target.value);
  };

  //REFACTOR remove on change and add submit btn, the below function is for reSearching the API which We stopped doing

  const handleSubmit = (e) => {
    e.preventDefault();
    setSearch(query);
  };

  return (

<form onSubmit={handleTextInput}>
    <div classname="relative py-2">
        <input type="search" onChange={handleTextInput}
        value={query} id="ship-search" classname="block w-full p-4 pl-10 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Ships By Name" required/>
    </div>
</form>



  );
};

export default SearchForm;
