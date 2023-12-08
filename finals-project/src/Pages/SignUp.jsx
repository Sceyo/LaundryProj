import React, { useState } from 'react';
import axios from 'axios';
import CompanyLogo from '../Images/logo.svg';
import apple from '../Images/apple.png';
import fb from '../Images/facebook.png';
import google from '../Images/google.png';
import './SignUp.css'

export default function SignUp() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleGoBack = () => {
    window.history.go(-1); // Go back to the previous page
  };

  const handleSignUp = async () => {
    try {
      // Make a POST request to your server's signup endpoint
      const response = await axios.post('http://localhost:3000/signup', { email, password });
      console.log(response.data); // Log the response from the server
      // Handle success or do something with the response
    } catch (error) {
      console.error('Error signing up:', error.response.data);
      // Handle error or display an error message to the user
    }
  };

  return (
    <>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
      <div className="SUBody">
        <div className="logoSide">
          <br />
          <a href="#" onClick={handleGoBack} style={{ textDecoration: 'none', color: 'black', fontSize: '30px', marginLeft: '30px', marginTop: '20px' }}><i className="fas fa-arrow-left"></i> Back</a>
          <img src={CompanyLogo} className="d-block" style={{ width: '300px', height: 'auto', marginTop: '90px', marginLeft: '160px' }} alt="Slide 1" />
          <h1>Smart Delivery</h1>
          <hr className="blackLine" />
          <p>"Freshness Delivered to Your Doorstep"</p>
        </div>
        <div className="rightSide">
          <h2>Enter your credentials here</h2>
          <div className="mb-3 custom-width">
            <input type="email" className="form-control" id="emailInput" placeholder="Email Address" style={{ height: '58px' }} value={email} onChange={(e) => setEmail(e.target.value)} />
          </div>
          <div className="mb-3 custom-width1">
            <input type="password" className="form-control" id="passwordInput" aria-describedby="passwordHelpBlock" placeholder="Password" style={{ height: '58px' }} value={password} onChange={(e) => setPassword(e.target.value)} />
          </div>
          <div className="mb-3 custom-width2">
            <input type="password" className="form-control" id="confirmPasswordInput" aria-describedby="passwordHelpBlock" placeholder="Confirm Password" style={{ height: '58px' }} />
          </div>
          <p>Or Continue With</p>
          <img src={fb} alt="Facebook" style={{ width: '50px', height: '50px', marginLeft: '260px', marginTop: '-10px' }} />
          <img src={google} alt="Facebook" style={{ width: '50px', height: '50px', marginLeft: '30px', marginTop: '-10px' }} />
          <img src={apple} alt="Facebook" style={{ width: '50px', height: '50px', marginLeft: '30px', marginTop: '-10px' }} />
      
          <form onSubmit={handleSignUp}>
        {/* Input fields and other elements */}
        <button type="submit" className="btn btn-primary btn-sm custom-button" style={{ width: '290px', height: '50px', marginLeft: '210px', marginTop: '40px', fontWeight: 'bold', backgroundColor: '#CDC2AE', color: 'black', fontSize: '20px' }} onClick={handleSignUp}>Sign Up</button>
      </form>
        </div>
      </div>
    </>
  );
}
