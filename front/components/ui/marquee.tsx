'use client'

import React, { useRef } from 'react'

export interface MarqueeProps {
  children: React.ReactNode
  pauseOnHover?: boolean
  reverse?: boolean
  className?: string
  style?: React.CSSProperties
}

export const Marquee: React.FC<MarqueeProps> = ({
  children,
  pauseOnHover = false,
  reverse = false,
  className = '',
  style,
}) => {
  const trackRef = useRef<HTMLDivElement | null>(null)

  const handleMouseEnter = () => {
    if (pauseOnHover && trackRef.current) trackRef.current.style.animationPlayState = 'paused'
  }

  const handleMouseLeave = () => {
    if (pauseOnHover && trackRef.current) trackRef.current.style.animationPlayState = 'running'
  }

  return (
    <div
      className={`relative overflow-hidden w-full ${className}`}
      style={style}
      onMouseEnter={handleMouseEnter}
      onMouseLeave={handleMouseLeave}
      aria-hidden
    >
      <div
        ref={trackRef}
        className="marquee-track flex items-center"
        style={{
          animation: `marquee var(--duration, 40s) linear infinite`,
          animationDirection: reverse ? 'reverse' : 'normal',
          alignItems: 'center',
          gap: '1.5rem',
        }}
      >
        <div className="marquee-segment flex items-center">{children}</div>
        <div className="marquee-segment flex items-center">{children}</div>
      </div>

      <style jsx>{`
        .marquee-track {
          display: flex;
          width: max-content;
        }

        .marquee-segment {
          display: flex;
          gap: 1.5rem;
        }

        @keyframes marquee {
          from { transform: translateX(0); }
          to   { transform: translateX(-50%); }
        }
      `}</style>
    </div>
  )
}

export default Marquee
