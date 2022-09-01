import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import LoginComponent from "./components/LoginComponent"

function MyRoute(){

    return(
        <BrowserRouter>
        <Routes>
            <Route path="/" exact element={<App/>} />
            <Route path="/login" exact element={<LoginComponent/>} />
            <Route path="/logi" exact element={<LoginComponent/>} />
        </Routes>
</BrowserRouter>
    )
}
export default MyRoute;