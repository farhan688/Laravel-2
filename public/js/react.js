// import React from 'react';

// class Greeting extends React.Component {
//   render() {
//     return <h1>Hello, {this.props.name}!</h1>;
//   }
// }

// export default Greeting;

import React from 'react';
import Greeting from './Greeting';

class App extends React.Component {
  render() {
    return (
      <div>
        <Greeting name="John" />
        <Greeting name="Jane" />
      </div>
    );
  }
}

export default App;
