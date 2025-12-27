'use client'

import { useContext } from 'react'
import { SettingsContext } from '@/contexts/settingsContext'

export const useSettings = () => {
  const ctx = useContext(SettingsContext)
  if (ctx === undefined) {
    throw new Error('useSettings must be used within a SettingsProvider')
  }
  return ctx
}

export default useSettings
