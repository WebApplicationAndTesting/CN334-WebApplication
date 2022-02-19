import Topbar from './components/topbar/Topbar';
import Intro from './components/intro/Intro';
import Skill from './components/skill/Skill';
import Contact from './components/contact/Contact';
import Menu from './components/menu/Menu';
import { useState } from 'react';
import './App.css';



function App() {
  const [menuOpen, setMenuOpen] = useState(false)
  return (
    <div className="App">
      <Topbar menuOpen={menuOpen} setMenuOpen={setMenuOpen}/>
      <Menu menuOpen={menuOpen} setMenuOpen={setMenuOpen}/>
      <div className='sections'>
        <Intro />
        <Contact />
        <Skill />
      </div>
    </div>
  );
}

export default App;
