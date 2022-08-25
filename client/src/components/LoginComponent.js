import './Login.css';

const LoginComponent=()=>{
    return (
        <div class="form">

        <label for="email">Email</label>
        <input type="email" id="email"></input>
        <label for="password">Password</label>
        <input type="password" id="password"></input>
        <input type="submit" id="submit" value="Submit"></input>
        </div>

    );
}
export default LoginComponent;