import { BrowserRouter, Route, Routes } from "react-router-dom";
import Dashboard from "./Admin/Pages/Dashboard";
import Add_Mng_user from "./Admin/Pages/Add_Mng_user";


function App() {
  return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<><Dashboard/></>}></Route>
          <Route path="/add_mng_user" element={<><Add_Mng_user/></>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
