import Topbar from './components/topbar/Topbar';
import Intro from './components/intro/Intro';
import Portfolio from './components/portfolio/Portfolio';
import Work from './components/work/Work';
import Skill from './components/skill/Skill';
import Contact from './components/contact/Contact';
import { useState } from 'react';
import Menu from './components/menu/Menu';
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
        <Portfolio />
        <Work />
      </div>
    </div>
  );
}

export default App;
