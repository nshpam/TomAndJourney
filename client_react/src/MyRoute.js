import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import LoginComponent from "./components/LoginComponent"
import RegisterComponent from "./components/RegisterComponent"
import AboutComponent from "./components/AboutComponent"


import FormComponent from "./components/FormComponent"


function MyRoute(){

    return(
        <BrowserRouter>
        <Routes>
            <Route path="/" exact element={<App/>} />
            <Route path="/login" exact element={<LoginComponent/>} />
            <Route path="/logi" exact element={<LoginComponent/>} />
            <Route path="/register" exact element={<RegisterComponent/>} />
            <Route path="/abouts" exact element={<AboutComponent/>} />


            <Route path="/form" exact element={<FormComponent/>} />

        </Routes>
</BrowserRouter>
    )
}
export default MyRoute;