
import "./portfolio.css"

const Portfolio = () => {

    return (
        <div className='portfolio' id="portfolio">
            <h1>Portfolio</h1>

            <div className="container-portfolio">
                <div className="item">
                    <img src="asset/calobite.png" alt="" />
                    <h3>Calobite</h3>
                </div>
                <div className="item">
                    <img src="asset/covid.png" alt="" />
                    <h3>Covid Visualization</h3>
                </div>
  
                <div className="item">
                    <img src="asset/moc.png" alt="" />
                    <h3>MOC Application</h3>
                </div>

                <div className="item">
                    <img src="asset/travel.png" alt="" />
                    <h3>Travel Application</h3>
                </div>
            </div>
          
        </div>
    );
}

export default Portfolio;