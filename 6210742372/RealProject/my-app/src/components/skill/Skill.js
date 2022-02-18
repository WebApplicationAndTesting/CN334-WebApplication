
import "./skill.css"

const Skill = () => {
    const data = [
        {
          id: 1,
          name: "Frameworks",
          desc:[
            "Angular",
            "React",
            "React native",
            "Vue.js",
            ".Net",
            "Laravel",
          ]   
        },
        {
          id: 2,
          name: "Programming Language",
          desc:[
            "JAVA",
            "Python",
            "SQL",
            "PHP",
            "C#",
            "HTML CSS Javasvript",
          ],   
          featured: true,
        },
        {
          id: 3,
          name: "Tools",
          desc:[
            "Visual Studio Code",
            "Visual Studio",
            "Eclipse",
            "Intellij"
          ]   
        },
      ];
    return (
        <div className='testimonials' id="testimonials">
            <h1>Technical Skills</h1>
            {/* <div className="button-zone">
              <button className="add">ADD</button>
              <button className="edit">EDIT</button>
            </div> */}
            <div className="container">
                {data.map((d) => (
                <div className={d.featured ? "card featured" : "card"}>
                  <div className="bottom">
                        <h3>{d.name}</h3>
                  </div>
                    <div className="center">{d.desc[0]}</div>
                    <div className="center">{d.desc[1]}</div>
                    <div className="center">{d.desc[2]}</div>                 
                    <div className="center">{d.desc[3]}</div>                              
                </div>
                ))}
            </div>
        </div>
    );
}

export default Skill;