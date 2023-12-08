import React, {useState} from 'react';
import { useNavigate } from 'react-router-dom';
import CompanyLogo from '../Images/Company Logo.jpg';
import HorizontalLine from '../Images/horizontal line.png';
import "./Login.css";

function Login() {
    const navigate = useNavigate(); // Use useNavigate for navigation
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const handleLogin = () => {
        // Validate the email address
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            // Alert the user for an invalid email
            alert('Please enter a valid email address.');
        return;
    }
        // Perform login logic here
        // For example, you can simulate a login delay with setTimeout
        setTimeout(() => {
            // Redirect to the homepage after successful login
            navigate('/');
        }, 1000); // Adjust the delay as needed
    };

    const handleCreateAccount = () => {
        // Redirect to the signup page
        navigate('/signup');
    };

    const handleGoBack = () => {
        window.history.go(-1); // Go back to the previous page
    };

    return (
        <>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"></link>
        
        <div className="login-background">
            <div className ="backBtn" style ={{marginTop: '-550px'}}>
            <a href="#" onClick={handleGoBack} style={{textDecoration: 'none',color: 'black',fontSize: '30px'}}><i class="fas fa-arrow-left"></i> Back</a> 
            </div>
            
             <div className="login-container">
                <div className="login-box">
                    <div className="company-info">
                        <img className="company-logo" src={CompanyLogo} alt="Company Logo" />
                        <h1 className="company-name">Smart Wash</h1>
                        <img className="horizontal-line" src={HorizontalLine} alt="Horizontal Line" />
                        <p className="motto">"Freshness Delivered to Your Doorstep"</p>
                    </div>
                <h2 className="login-title">LOGIN</h2>
                <div className="input-fields">
                    <div className="input-wrapper">
                        <input
                            type="email"
                            className="input"
                            placeholder="Email"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            title="Enter a valid email address"
                        />
                    </div>
                    <div className="input-wrapper">
                        <input
                            type="password"
                            className="input"
                            placeholder="Password"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                        />
                    </div>
                </div>
                <div className="remember-me">
                    <input type="checkbox" className="rem-check" id="rememberMe" />
                    <label className="rem" htmlFor="rememberMe">Remember me</label>
                    <div className="login-btn-rem" />
                    <button className="login-btn" onClick={handleLogin}>
                        LOGIN
                    </button>
                </div>
                <div className="create-account">
                    <p className="text-wrapper">Don't have an account?</p>
                    <button className="create-account-btn" onClick={handleCreateAccount}>
                            Create Account
                    </button>
                </div>
            </div>
        </div>
    </div>
    </>
  );
}

export default Login;
