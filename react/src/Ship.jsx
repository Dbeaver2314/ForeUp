import React from "react";

const Ship = ({ name, model, manufacturer }) => {

  return (
        <tr classname="bg-white border-bg-gray-800 border-gray-700">
                <th scope="row" class=" xl px-6 py-4 font-medium whitespace-nowrap text-white">
                    {name}
                </th>
                <td className=" xl px-6 py-4">
                    {model}
                </td>
                <td classname=" xl px-6 py-4">
                    {manufacturer}
                </td>
                <td classname=" xl px-6 py-4">
                    <input type="checkbox" />
                </td>

     </tr>
  );
};

export default Ship;
