import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import LoginComponent from "./components/LoginComponent"

function MyRoute(){

    return(
        <BrowserRouter>
        
            <Routes>
                <Route path="/" exact component={App} />
                <Route path="/Login" exact component={LoginComponent} />
            </Routes>
        
        </BrowserRouter>
    )
}
export default MyRoute;