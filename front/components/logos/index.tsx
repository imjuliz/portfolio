import React from 'react'

export const Logo01 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#E4E7EB" />
    <circle cx="18" cy="16" r="8" fill="#60A5FA" />
  </svg>
)

export const Logo02 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#F8FAFC" />
    <rect x="12" y="8" width="24" height="16" rx="3" fill="#34D399" />
  </svg>
)

export const Logo03 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#F1F5F9" />
    <polygon points="20,24 36,8 52,24" fill="#F472B6" />
  </svg>
)

export const Logo04 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#FEF3C7" />
    <path d="M18 20a6 6 0 110-12 6 6 0 010 12z" fill="#FBBF24" />
  </svg>
)

export const Logo05 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#EEF2FF" />
    <path d="M24 10h20v12H24z" fill="#7C3AED" />
  </svg>
)

export const Logo06 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#ECFEFF" />
    <path d="M18 16c3-6 9-6 12 0s9 6 12 0" stroke="#06B6D4" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
)

export const Logo07 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#FFF7ED" />
    <path d="M16 22l8-12 8 12 8-8 8 8" stroke="#FB923C" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" fill="none" />
  </svg>
)

export const Logo08 = (props: React.SVGProps<SVGSVGElement>) => (
  <svg width="96" height="32" viewBox="0 0 96 32" fill="none" xmlns="http://www.w3.org/2000/svg" {...props}>
    <rect width="96" height="32" rx="6" fill="#F0FDF4" />
    <path d="M18 16c3-4 9-4 12 0 3 4 9 4 12 0" stroke="#10B981" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
)

export default {
  Logo01,
  Logo02,
  Logo03,
  Logo04,
  Logo05,
  Logo06,
  Logo07,
  Logo08,
}
