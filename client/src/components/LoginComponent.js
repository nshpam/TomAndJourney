import './Login.css';

const LoginComponent=()=>{
    return (
        <div class="form-login">
            <h1 id="title-login">LOGIN</h1>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email"></input>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password"></input>
            </div>
            
            <a href="#" id="forgetpass">Forget password</a>
            <span id="remem-check"> 
                <input type="checkbox" id="checkbox-remember">
                    </input> 
                    Remember me.  
                 </span> 
            

            <div>
                <input type="submit" id="submit" value="Login"></input>
            </div>

            

                
        </div>

    );
}
export default LoginComponent;