import { useState } from "react";

export default function Five() {
  const [name, setName] = useState("");

  return (
    <div>
      <input onChange={(e) => setName(e.target.value)} />
      <h2>{name}</h2>
    </div>
  );
}