import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import Home from "./components/HomeComponent"
import LoginComponent from "./components/LoginComponent"
import RegisterComponent from "./components/RegisterComponent"
import TripplanComponent from "./components/TripplanComponent"


import FormComponent from "./components/FormComponent"
import HamburgerIcon from "./components/HamburgerIcon"
import Footer from "./components/Footer"

function MyRoute(){

    return(
        <BrowserRouter>
        <Routes>
            <Route path="/" exact element={<Home/>} />
            <Route path="/login" exact element={<LoginComponent/>} />
            <Route path="/logi" exact element={<LoginComponent/>} />
            <Route path="/register" exact element={<RegisterComponent/>} />
            <Route path="/Tripplanner" exact element={<TripplanComponent/>} />
            
            <Route path="/footer" exact element={<Footer/>} />
            <Route path="/ham" exact element={<HamburgerIcon/>} />
            <Route path="/form" exact element={<FormComponent/>} />

        </Routes>
</BrowserRouter>
    )
}
export default MyRoute;