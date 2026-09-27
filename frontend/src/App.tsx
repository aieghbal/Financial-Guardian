import { useEffect, useState } from 'react'

type HealthResponse = {
  status: string
  application: string
}

function App() {
  const [health, setHealth] = useState<HealthResponse | null>(null)

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/health')
      .then((response) => response.json())
      .then((data: HealthResponse) => {
        setHealth(data)
      })
  }, [])

  return (
    <div>
      <h1>Financial Guardian</h1>

      {health && (
        <p>
          Backend: {health.status} — {health.application}
        </p>
      )}
    </div>
  )
}

export default App