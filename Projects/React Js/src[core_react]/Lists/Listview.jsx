import React from 'react'

//<h1>List View Example</h1>
//<Listview data={dataList} />

function Listview({data}) {
  return (
    <div>
      <ul>
        {data.map((item) => (
          <li key={item.id}>{item.text}</li>
        ))}
      </ul>
    </div>
  );
}

export default Listview