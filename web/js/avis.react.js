const AvisSection = React.createClass({
    getInitialState: function() {
        return {
            avis: []
        }
    },
    componentDidMount: function() {
        this.loadAvisFromServer();
        setInterval(this.loadAvisFromServer, 2000);
    },
    loadAvisFromServer: function() {
        $.ajax({
            url: this.props.url,
            success: function (data) {
                this.setState({avis: data.avis});
            }.bind(this)
        });
    },
    render: function() {
        return (
            <div>
            <div className="avis-container">
            <h2 className="avis-header">Avis</h2>
            <div><i className="fa fa-plus plus-btn"></i></div>
        </div>
        <AvisList avis={this.state.avis} />
        </div>
    );
    }
});
const AvisList = React.createClass({
    render: function() {
        let avisNodes = this.props.avis.map(function(avis) {
            return (
                <AvisBox username={avis.username} avatarUri={avis.avatarUri} date={avis.date} key={avis.id}>{avis.note}</AvisBox>
        );
        });
        return (
            <section id="cd-timeline">
            {avisNodes}
            </section>
    );
    }
});
const AvisBox = React.createClass({
    render: function() {
        return (
            <div className="cd-timeline-block">
            <div className="cd-timeline-img">
            <img src={this.props.avatarUri} className="img-circle" alt="Leanna!" />
            </div>
            <div className="cd-timeline-content">
            <h2><a href="#">{this.props.username}</a></h2>
        <p>{this.props.children}</p>
        <span className="cd-date">{this.props.date}</span>
        </div>
        </div>
    );
    }
});
window.AvisSection = AvisSection;