import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import LoginComponent from "./components/LoginComponent"
import RegisterComponent from "./components/RegisterComponent"

function MyRoute(){

    return(
        <BrowserRouter>
        <Routes>
            <Route path="/" exact element={<App/>} />
            <Route path="/login" exact element={<LoginComponent/>} />
<<<<<<< HEAD
            <Route path="/logi" exact element={<LoginComponent/>} />
=======
            <Route path="/register" exact element={<RegisterComponent/>} />
>>>>>>> c3dc51d08a67cecf6b9833b3e8a592bfca70165f
        </Routes>
</BrowserRouter>
    )
}
export default MyRoute;