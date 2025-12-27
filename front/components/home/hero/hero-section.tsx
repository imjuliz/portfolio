import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'
import { Marquee } from '@/components/ui/marquee'
import { Logo01, Logo02, Logo03, Logo04, Logo05, Logo06, Logo07, Logo08, } from '@/components/logos'
import TypingText from '@/components/ui/typing-text';

const HeroSection = () => {
  return (
    <section className='flex min-h-[calc(100dvh-4rem)] flex-1 flex-col justify-between gap-12 overflow-x-hidden pt-8 sm:gap-16 sm:pt-16 lg:gap-24 lg:pt-24'>
      {/* Hero Content */}
      <div className='mx-auto flex max-w-7xl flex-col items-center gap-8 px-4 text-center sm:px-6 lg:px-8'>
        {/* <div className='bg-muted flex items-center gap-2.5 rounded-full border px-3 py-2'>
          <Badge>AI-Powered</Badge>
          <span className='text-muted-foreground'>Solution for client-facing businesses</span>
        </div> */}

        <div className="flex items-center justify-center w-full">
          <TypingText
            text={["Oi, eu sou Julia Alves!", "Venha me conhecer"]}
            typingSpeed={75}
            pauseDuration={1500}
            showCursor={true}
            className="text-sm font-medium text-center max-w-2xl"
            cursorClassName="h-3"
            textColors={['#9ca3af']}
            variableSpeed={{ min: 50, max: 120 }}
          />
        </div>

        <h1 className='text-3xl leading-[1.29167] font-bold text-balance sm:text-4xl lg:text-5xl'>
          Desenvolvedora Full Stack focada em criar
          <br />
          <span className='relative'>
            soluções
            <svg
              width='223'
              height='12'
              viewBox='0 0 223 12'
              fill='none'
              xmlns='http://www.w3.org/2000/svg'
              className='absolute inset-x-0 bottom-0 w-full translate-y-1/2 max-sm:hidden'
            >
              <path
                d='M1.11716 10.428C39.7835 4.97282 75.9074 2.70494 114.894 1.98894C143.706 1.45983 175.684 0.313587 204.212 3.31596C209.925 3.60546 215.144 4.59884 221.535 5.74551'
                stroke='url(#paint0_linear_10365_68643)'
                strokeWidth='2'
                strokeLinecap='round'
              />
              <defs>
                <linearGradient
                  id='paint0_linear_10365_68643'
                  x1='18.8541'
                  y1='3.72033'
                  x2='42.6487'
                  y2='66.6308'
                  gradientUnits='userSpaceOnUse'
                >
                  <stop stopColor='var(--primary)' />
                  <stop offset='1' stopColor='var(--primary-foreground)' />
                </linearGradient>
              </defs>
            </svg>
          </span>{' '}
          eficientes e escaláveis.
        </h1>

        <p className='text-muted-foreground'>
          Sou desenvolvedora full stack em formação, com experiência em projetos
          <br />
          práticos usando Next.js, Node.js e bancos de dados relacionais.
        </p>

        <div className='flex flex-row gap-6'>
          <Button size='lg' asChild>
            <a href='#'>Entrar em contato</a>
          </Button>
          <Button size='lg' variant="outline" asChild>
            <a href='#'>Baixar CV</a>
          </Button>
        </div>

      </div>

      {/* Image */}
      <div className="flex items-center justify-center px-6">
        <div className="overflow-hidden">

          <div className="max-w-screen-xl space-y-8">
            <Marquee
              pauseOnHover
              className="mask-x-from-70% mask-x-to-90% [--duration:40s] [&_svg]:mr-10"
            >
              <Logo01 />
              <Logo02 />
              <Logo03 />
              <Logo04 />
              <Logo05 />
              <Logo06 />
              <Logo07 />
              <Logo08 />
            </Marquee>
            <Marquee
              pauseOnHover
              reverse
              className="mask-x-from-70% mask-x-to-90% [--duration:40s] [&_svg]:mr-10"
            >
              <Logo01 />
              <Logo02 />
              <Logo03 />
              <Logo04 />
              <Logo05 />
              <Logo06 />
              <Logo07 />
              <Logo08 />
            </Marquee>
          </div>
        </div>
      </div>
    </section>
  )
}

export default HeroSection