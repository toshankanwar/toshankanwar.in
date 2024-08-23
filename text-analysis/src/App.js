import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Aboutus from './components/Aboutus';
import Navbar from "./components/Navbar";
import Textform from "./components/Textform"
import Contact from "./components/Contact";


const App = () => {
  return (
    <Router>
    <Navbar/>
      <Routes>
      <Route path="/" element={<Textform />} />
        <Route path="/About" element={<Aboutus />} />
        <Route path="/Contact" element={<Contact />} />
  
      </Routes>
    </Router>
  
    
  );
};

export default App;
