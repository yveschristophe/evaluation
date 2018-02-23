import React, { Component } from 'react';
import './App.css';

class App extends Component {
    state = {
        nb: 1,
    }
increment() {
    this.setState({
        nb: this.state.nb + 1
    })
}
decrement() {
  this.setState({
      nb: this.state.nb - 1
  })
}
Win(){
  if(this.state.nb >= 10){
    this.setState({
      nb : "Win"
    })
  }
}

render() {
  const state = this.state.nb; 
if(state >= 10){

}

    return (
        <div>
            <h1>{ this.state.nb }</h1>
            <button onClick={ ( ) => this.increment()}>
                +
            </button>
            <button onClick={ ( ) => this.decrement() }>
                -
            </button>
        </div>
    )
}
}

export default App;
