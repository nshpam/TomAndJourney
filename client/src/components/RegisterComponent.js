import './Register.css';

const RegisterComponent=()=>{
    return (
        <div>
            <div class="loginNav">
            </div>
        <div class="form-login">
            <h1 id="title-login">Register</h1>
            <h3 id="subtitle-login">sign up your account</h3>

            <div>
                <label for="email">Email : </label>
                <input type="email" id="email"></input>
            </div>

            <div>
                <label for="password">Password :</label>
                <input type="password" id="password"></input>
            </div>

            <div>
                <label for="password"> Comfirmed Password :</label>
                <input type="password" id="comfirm-password"></input>
            </div>

            <div>
                <label for="password">Password :</label>
                <input type="password" id="password"></input>
            </div>

            {/* w
            <a href="#" id="forgetpass">Forget password</a>
            <span id="remem-check"> 
                <input type="checkbox" id="checkbox-remember">
                    </input> 
                    Remember me.  
                 </span> 
             */}

            <div>
                <input type="submit" id="regis-submit" value="Register"></input>
            </div>

            

            

                
        </div>
        {/* FOOTER WIP */}
        {/* <footer>WIP</footer> */}
        </div>

    );
}
export default RegisterComponent;