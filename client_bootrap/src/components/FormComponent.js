const FormComponent=()=>{
    return(
            <div>
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

            <div>
                <input type="submit" id="regis-submit" value="Register"></input>
            </div>
     
        </div>
        </div>

    );
} 
export default FormComponent;