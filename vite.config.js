import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  plugins: [react()],
  base: "/MBLearn/",
  proxy: {
    '/submit.php': 'http://localhost:8000',
},
});