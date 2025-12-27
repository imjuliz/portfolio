import type { Metadata } from "next";
import { Raleway } from 'next/font/google'
import "./globals.css";
import { SettingsProvider } from '@/contexts/settingsContext'
import { ThemeProvider } from 'next-themes'

const raleway = Raleway({
  variable: '--font-raleway',
  subsets: ['latin'],
  weight: ['100', '200', '300', '400', '500', '600', '700', '800', '900'], 
  style: ['normal', 'italic'],
  display: 'swap',
})

export const metadata: Metadata = {
  title: "Portfólio - Julia Alves",
  description: "Portfólio de Julia Alves, desenvolvedora full stack em formação, com projetos práticos em desenvolvimento web usando React, Node.js e JavaScript."
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="pt">
      <body
        className={`${raleway.variable} antialiased`}
      >
        <ThemeProvider attribute="class" defaultTheme="system">
          <SettingsProvider>
            {children}
          </SettingsProvider>
        </ThemeProvider>
      </body>
    </html>
  );
}
