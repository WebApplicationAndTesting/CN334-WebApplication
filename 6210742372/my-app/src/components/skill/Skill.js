import React, { Component } from "react";
import axios from "axios";

import "./skill.css"

class Skill extends Component {
  state = {
    data : []
  }

  async componentDidMount() {
    const resFramework = await axios.get('http://127.0.0.1:8000/api/framework');
    if(resFramework.data.status === 200) {
      const frameworkObj = {
        id: 1,
        name: "Frameworks",
        desc:[]   
      }
      resFramework.data.framework.forEach(f => {
        frameworkObj.desc.push(f.framework)
      });
      this.setState({
        data: [...this.state.data, frameworkObj]
      });
    }
    
    const resLang = await axios.get('http://127.0.0.1:8000/api/lang');
    if(resLang.data.status === 200) {
      const langObj = {
        id: 2,
        name: "Programing Language",
        desc:[],
        featured: true  
      }
      resLang.data.programlang.forEach(f => {
        langObj.desc.push(f.lang)
      });
      this.setState({
        data: [...this.state.data, langObj]
      });
    }

    const resTool = await axios.get('http://127.0.0.1:8000/api/tool');
    if(resTool.data.status === 200) {
      // console.log('Tool', resTool.data);
      const toolObj = {
        id: 3,
        name: "Tools",
        desc:[]   
      }
      resTool.data.tools.forEach(f => {
        toolObj.desc.push(f.tool)
      });
      this.setState({
        data: [...this.state.data, toolObj]
      });
 
    }
  }

  render(){

    return (
        <div className='testimonials' id="testimonials">
            <h1>Technical Skills</h1>
            <div className="container">
                {this.state.data.map((d,i) => (
                <div className={d.featured ? "card featured" : "card"}>
                  <div className="bottom">
                        <h3>{d.name}</h3>
                  </div>
                   {this.state.data[i].desc.map((e)=> (

                    <div className="center">{e}</div>                              
                   ))} 
                </div>
                ))}
            </div>
        </div>
    );
}

  }

export default Skill;