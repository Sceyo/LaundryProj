import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import './Footer.css';
import CompanyLogo from '../Images/Company Logo.jpg';
import VerticalLine from '../Images/vertical line.png';
import FacebookLogo from '../Images/facebook.png';
import InstagramLogo from '../Images/instagram.png';
import TwitterLogo from '../Images/twitter - x.png';
import YoutubeLogo from '../Images/youtube.png';
import Copyright from '../Images/copyright.png';

function Footer () {
    const [email, setEmail] = useState('');

    const handleSubscribe = () => {
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
            alert('You have successfully subscribed to our newsletter!');
        }, 1000); // Adjust the delay as needed
    };
    return (
        <footer className="footer">
          <div className="footer-section">
            <img src={CompanyLogo} alt="Smart Delivery Logo" className="logo" />
            <p className="footer-text">Smart Delivery</p>
          </div>
        <img src={VerticalLine} alt="vertical line" className='verticalLine1'/>
        <div className="quick-links-section">
            <p className="quick-links">Quick Links</p>
                <ul>
                    <li><Link to="/services">&gt; Services</Link></li>
                    <li><Link to="/about">&gt; About Us</Link></li>
                    <li><Link to="/contact-us">&gt; Contact Us</Link></li>
                    <li><Link to="/pricing">&gt; Pricing</Link></li>
                    <li><Link to="/terms-conditions">&gt; Terms & Conditions</Link></li>
                </ul>
        </div>
        <img src={VerticalLine} alt="vertical line" className='verticalLine2'/>
        <div className="newsletter-section" >
            <p className='newsletter'>Newsletter</p>
            <p className='subscribe'>Subscribe to get the latest media updates</p>
            <input
                type="email"
                placeholder="Enter Your Email"
                className={`email-input ${email ? 'filled' : ''}`}
                value={email}
                onChange={(e) => setEmail(e.target.value)}
            />
      <button className="sub-btn" onClick={handleSubscribe}>
        Subscribe
      </button>
    </div>
        <img src={VerticalLine} alt="vertical line" className='verticalLine3'/>
        <div className="social-media-section">
            <p className="social-media">Social Media</p>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
              <img src={FacebookLogo} alt="Facebook" className="social-icon" />
            </a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
              <img src={InstagramLogo} alt="Instagram" className="social-icon" />
            </a>
            <a href="https://www.twitter.com/" target="_blank" rel="noopener noreferrer">
              <img src={TwitterLogo} alt="X" className="social-icon" />
            </a>
            <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
              <img src={YoutubeLogo} alt="Youtube" className="social-icon" />
            </a>
            <p className="copyright">
                 <img src={Copyright} alt='copyright' className='c-logo' /> {new Date().getFullYear()} Copyright
            </p>
        </div>
    </footer>
    );
};
export default Footer;