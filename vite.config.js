import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
  plugins: [liveReload([__dirname + "/**/*.(php|html|js|css)", __dirname + "/**/*.(js|css|ts)"])],
  server: {
    cors: {
      origin: "*",
    },
  },
});
