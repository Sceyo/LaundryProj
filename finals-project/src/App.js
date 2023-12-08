import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Navbar from './Components/Navbar';
import Home from './Pages/Home'
import Services from './Pages/Services'; 
import About from './Pages/About'; 
import Contact from './Components/ContactForm';
import Reviews from './Pages/Reviews'; 
import Login from './Pages/Login';
import SignUp from './Pages/SignUp';
import Footer from './Components/Footer';
import ProfileInfo from './Pages/ProfileInfo'
import OrdersHist from './Pages/OrdersHistory'
import OrderTrack from './Pages/OrderTracking'
import Cart from './Pages/Cart'
import Payment from './Pages/Payment'
import Test from './Pages/OrderTracking'

export default function App() {
  return (
    <>
    <Router>
      <Routes>
        <Route path="/" element={<Home />} /> 
         <Route path="/services" element={<Services />} />
        <Route path="/about" element={<About />} />
        <Route path="/contact-us" element={<Contact />} />
        <Route path="/reviews" element={<Reviews />} />
        <Route path="/login" element={<Login />} />
        <Route path="/signup" element={<SignUp/>} />
        <Route path = "/profile-info" element = {<ProfileInfo/>}/>
        <Route path = "/orders-history" element = {<OrdersHist/>}/>
         <Route path = "/order-tracking" element = {<OrderTrack/>}/>
         <Route path = "/cart" element = {<Cart/>}/>
         <Route path = "/payment" element = {<Payment/>}/>
      </Routes>
    </Router>
    {/* <Test/> */}
    </>
  );
}
