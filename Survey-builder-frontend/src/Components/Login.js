import { useState } from 'react';
import {Link, useHistory} from 'react-router-dom';



const Login = () => {

    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    
    // const history = useHistory();


    async function login() {
        let user={email, password};
        let result =  await fetch('http://localhost:8000/api/login',{
            method:'$POST',
                headers: {"content-type":"Application/json",
                         "Accept":"Application/json"},
                         
            body:JSON.stringify(user)

        });
        result = await result.json();
           
    }

   

    return ( 
        <div className="login">
            <h1>Login</h1>

            <input className="admin_email" id='admin_email' onChange={(e)=>setEmail(e.target.value)} placeholder="Email"/>
            <input className="admin_password" id='admin_password' onChange={(e)=>setPassword} placeholder="Password" type="password"/>

            <button onClick={login}>Login</button>

        </div>

     );
}
 
export default Login;