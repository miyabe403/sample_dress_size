import React, { useState } from 'react';

const App = () => {
  const [bust, setBust] = useState('');
  const [waist, setWaist] = useState('');
  const [hip, setHip] = useState('');
  const [shoulder, setShoulder] = useState('');
  const [size, setSize] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();

    const response = await fetch(`http://peppermint.starfree.jp/PLACOLE/index.php?bust=${bust}&waist=${waist}&hip=${hip}&shoulder=${shoulder}`);
    const data = await response.json();

    setSize(data.size);
  };

  return (
    <div>
      <h1>ドレスサイズ診断</h1>
      <form onSubmit={handleSubmit}>
        <label>
          バスト (cm):
          <input type="number" value={bust} onChange={(e) => setBust(e.target.value)} required />
        </label>
        <br />
        <label>
          ウエスト (cm):
          <input type="number" value={waist} onChange={(e) => setWaist(e.target.value)} required />
        </label>
        <br />
        <label>
          ヒップ (cm):
          <input type="number" value={hip} onChange={(e) => setHip(e.target.value)} required />
        </label>
        <br />
        <label>
          肩幅 (cm):
          <input type="number" value={shoulder} onChange={(e) => setShoulder(e.target.value)} required />
        </label>
        <br />
        <button type="submit">サイズを確認</button>
      </form>
      {size && <p>おすすめサイズ: {size}</p>}
    </div>
  );
};

export default App;
