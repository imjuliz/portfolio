'use client'

import React, { createContext, useEffect, useState } from 'react'

export type Mode = 'light' | 'dark' | 'system'

export type Settings = {
  mode: Mode
  theme?: {
    styles?: {
      light?: Record<string, any>
      dark?: Record<string, any>
    }
  }
}

type SettingsContextValue = {
  settings: Settings
  updateSettings: (patch: Partial<Settings> | ((prev: Settings) => Settings)) => void
  resetSettings: () => void
}

const DEFAULT_SETTINGS: Settings = {
  mode: 'dark',
  theme: {
    styles: {
      dark: {
        background: '#000000',
        foreground: '#ffffff',
        primary: 'var(--primary)'
      },
      light: {
        background: '#ffffff',
        foreground: '#000000'
      }
    }
  }
}

// Use undefined as default so our hook can detect missing provider
export const SettingsContext = createContext<SettingsContextValue | undefined>(undefined)

export const SettingsProvider = ({ children }: { children: React.ReactNode }) => {
  const [settings, setSettings] = useState<Settings>(DEFAULT_SETTINGS)

  // Hydrate from localStorage on mount
  useEffect(() => {
    try {
      const raw = localStorage.getItem('settings')
      if (raw) {
        const parsed = JSON.parse(raw)
        setSettings(prev => ({ ...prev, ...parsed }))
      }
    } catch (e) {
      // ignore
    }
  }, [])

  // Persist on changes
  useEffect(() => {
    try {
      localStorage.setItem('settings', JSON.stringify(settings))
    } catch (e) {
      // ignore
    }
  }, [settings])

  const updateSettings = (patch: Partial<Settings> | ((prev: Settings) => Settings)) => {
    setSettings(prev => (typeof patch === 'function' ? patch(prev) : { ...prev, ...patch }))
  }

  const resetSettings = () => setSettings(DEFAULT_SETTINGS)

  return (
    <SettingsContext.Provider value={{ settings, updateSettings, resetSettings }}>
      {children}
    </SettingsContext.Provider>
  )
}
