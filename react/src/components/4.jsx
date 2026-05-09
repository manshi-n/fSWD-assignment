import { useState,useEffect } from "react"

function App() {

  const [time,setTime] = useState(new Date())

  useEffect(() => {

    setInterval(() => {

      setTime(new Date())

    },1000)

  },[])

  return (

    <div>

      <h1>{time.toLocaleTimeString()}</h1>

    </div>

  )

}

export default App