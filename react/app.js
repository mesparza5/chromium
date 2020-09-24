import React from 'react'
import ReactDOM from 'react-dom'
import Homepage from './containers/homepage'

class App extends React.Component {
    render () {
        return (
            <div className="homepage">
                <Homepage />
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('homepage'))