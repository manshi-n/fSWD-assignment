import { useState } from "react"

function App() {

  const [name,setName] = useState("")

  return (

    <div>

      <input
        type="text"
        placeholder="Enter Name"
        onChange={(e) => setName(e.target.value)}
      />

      <h1>{name}</h1>

    </div>

  )

}

export default App