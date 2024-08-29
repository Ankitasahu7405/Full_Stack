{
    /*  
    React Components
    Components are independent and reusable bits of code. 
    They serve the same purpose as JavaScript functions, but work in isolation 
    and return HTML.

    Components come in two types, Class components and Function components, 
    in this tutorial we will concentrate on Function components.

    
    1) Class Component

    A class component must include the extends React.Component statement. 
    This statement creates an inheritance to React.Component, and gives your component 
    access to React.Component's functions.

    The component also requires a render() method, this method returns HTML.

    class Car extends React.Component {
        render() {
          return <h2>Hi, I am a Car!</h2>;
        }
    }


    2)Function Component

    Here is the same example as above, but created using a Function component instead.
    A Function component also returns HTML, and behaves much the same way as a 
    Class component, but Function components can be written using much less code, 
    are easier to understand, and will be preferred in this tutorial.

    function Car() {
      return <h2>Hi, I am a Car!</h2>;
    }
    */
}

//rfce
import React from 'react'

function Func_component() {
  return (
    <div>Func_component</div>
  )
}
export default Func_component

// rfc
/*
import React from 'react'

export default function Func_component() {
  return (
    <div>Func_component</div>
  )
}
*/