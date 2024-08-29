import { Shop } from "@mui/icons-material";
import Class_component from "./Component/Class_component";
import Fun_component from "./Component/Func_component";
import Home from "./Layout/Pages/Home";
import Shopping_web from "./MUI/Shopping_web";
import { Helmet } from "react-helmet";
import Listview from "./Lists/Listview";
import Cart from "./Lists/Cart";
import React_Bootstrap from "./Bootstrap/React_Bootstrap";
import Simple_Bootstrap from "./Bootstrap/Simple_Bootstrap";

function App() {
  /*const dataList = [
    { id: 1, text: 'Item 1' },
    { id: 2, text: 'Item 2' },
    { id: 3, text: 'Item 3' },
    { id: 4, text: 'Item 4' },
  ];*/

  return (
    <div>
      {
        //Component
        //<Fun_component/>
        //<Class_component/>

        // jsx
        //<Jsx_component/>

        //<Simple_Bootstrap/>
        //<React_Bootstrap/>

        //layout
        //<Home/>
        //<About/>
        //<Contact/>

        //props
        //<Main_props/>

        //<Shopping_web/>
        //<Cart/>
      }
    </div>
  );
}

export default App;
