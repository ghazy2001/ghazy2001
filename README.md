<div align="center">

# Hi there, I'm Mahmoud Ghazy 👋
### Frontend / Full-Stack Software Engineer | Core Open-Source Contributor

[![GitHub followers](https://img.shields.io/github/followers/ghazy2001?label=Follow&style=social)](https://github.com/ghazy2001)
[![GitHub Sponsors](https://img.shields.io/badge/Sponsor-%E2%9D%A4-ea4aaa?logo=githubsponsors&logoColor=white)](https://github.com/sponsors/ghazy2001)
[![Email](https://img.shields.io/badge/Email-mahmoudghazy2001%40gmail.com-0078D4?logo=gmail&logoColor=white)](mailto:mahmoudghazy2001@gmail.com)
[![Status](https://img.shields.io/badge/Available%20for-Remote%20Contracts%20%26%20Retainers-2ea44f?style=for-the-badge)](#-contact--connect)

<p align="center">
  <b>Frontend / Full-Stack Engineer</b> building high-performance, polished user interfaces and architecting mission-critical logic, concurrency-safe engines, and scalable web applications.<br>
  Active core contributor across top-tier open-source platforms (<b>PostHog, Better-Auth, Twenty CRM, Chatwoot, Umami, Cal.com, Langfuse, Cap</b>), with <b>100+ production-grade pull requests (20 merged, 100+ active)</b> solving UI state synchronization, OIDC/OAuth security, race condition remediation, and web performance optimizations.
</p>

---

</div>

## 🛠️ Technical Skills

<div align="center">

| Area | Technologies & Frameworks |
|---|---|
| **Languages & Core** | ![TypeScript](https://img.shields.io/badge/TypeScript-3178C6?logo=typescript&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black) ![Python](https://img.shields.io/badge/Python-3776AB?logo=python&logoColor=white) ![SQL](https://img.shields.io/badge/SQL-4479A1?logo=postgresql&logoColor=white) ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white) |
| **Frontend & UI Systems** | ![React 19](https://img.shields.io/badge/React%2019-61DAFB?logo=react&logoColor=black) ![Next.js](https://img.shields.io/badge/Next.js%20(App%20Router)-000000?logo=next.js&logoColor=white) ![TanStack Query](https://img.shields.io/badge/TanStack%20Query-FF4154?logo=react-query&logoColor=white) ![Zustand](https://img.shields.io/badge/Zustand-443e38?logo=react&logoColor=white) ![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-06B6D4?logo=tailwindcss&logoColor=white) ![shadcn/ui](https://img.shields.io/badge/shadcn%2Fui-000000?logo=shadcnui&logoColor=white) ![Core Web Vitals](https://img.shields.io/badge/Core%20Web%20Vitals-sub--1.2s%20LCP-4285F4?logo=googlechrome&logoColor=white) |
| **Backend & Architecture** | ![Node.js](https://img.shields.io/badge/Node.js-339933?logo=node.js&logoColor=white) ![Express](https://img.shields.io/badge/Express-000000?logo=express&logoColor=white) ![NestJS](https://img.shields.io/badge/NestJS-E0234E?logo=nestjs&logoColor=white) ![Django](https://img.shields.io/badge/Django-092E20?logo=django&logoColor=white) ![GraphQL](https://img.shields.io/badge/GraphQL-E10098?logo=graphql&logoColor=white) ![REST APIs](https://img.shields.io/badge/REST%20APIs-005571?logo=postman&logoColor=white) ![JSON-RPC](https://img.shields.io/badge/JSON--RPC-blue?logo=json) ![Webhooks](https://img.shields.io/badge/Webhooks-FF6C37?logo=webhook&logoColor=white) |
| **Auth, Security & Identity** | ![OIDC Core](https://img.shields.io/badge/OpenID%20Connect-OIDC%20Core%20§3.1.3.3-F78C40?logo=openid) ![OAuth 2.0](https://img.shields.io/badge/OAuth%202.0-PKCE%20%26%20Refresh%20Family-black?logo=oauth) ![Better-Auth](https://img.shields.io/badge/Better--Auth-Core-blue) ![JWT](https://img.shields.io/badge/JWT-000000?logo=jsonwebtokens&logoColor=white) ![WebAuthn](https://img.shields.io/badge/WebAuthn-2FA-darkgreen) |
| **Databases & Caching** | ![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?logo=postgresql&logoColor=white) ![ClickHouse](https://img.shields.io/badge/ClickHouse-FFCC01?logo=clickhouse&logoColor=black) ![MongoDB](https://img.shields.io/badge/MongoDB-47A248?logo=mongodb&logoColor=white) ![Redis](https://img.shields.io/badge/Redis%20(Locks%2FCaching)-DC382D?logo=redis&logoColor=white) ![Prisma](https://img.shields.io/badge/Prisma%20ORM-2D3748?logo=prisma&logoColor=white) ![TypeORM](https://img.shields.io/badge/TypeORM-FE0803?logo=typeorm&logoColor=white) |
| **DevOps & Testing** | ![Vitest](https://img.shields.io/badge/Vitest-6E9F18?logo=vitest&logoColor=white) ![Jest](https://img.shields.io/badge/Jest-C21325?logo=jest&logoColor=white) ![PyTest](https://img.shields.io/badge/PyTest-0A9EDC?logo=pytest&logoColor=white) ![Docker](https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=white) ![GitHub Actions](https://img.shields.io/badge/GitHub%20Actions-2088FF?logo=githubactions&logoColor=white) ![Git](https://img.shields.io/badge/Git%20%26%20GitHub-F05032?logo=git&logoColor=white) |

</div>

---

## 🌐 Featured Core Open-Source Engineering

Active contributor to venture-backed, high-scale open-source ecosystems solving distributed locking, security, race conditions, and architecture:

### 🛡️ **[Better Auth](https://github.com/better-auth/better-auth)** *(The comprehensive TypeScript auth framework, 15k+ ⭐)*
- **Organization Limit Concurrency Lock**: Architected in-process serialization and transactional boundaries (`runWithTransaction`) on organization creation endpoints, eliminating TOCTOU race condition bypasses under concurrent burst traffic ([PR #12157](https://github.com/better-auth/better-auth/pull/12157) — fixes #12149).
- **OIDC Discovery & Compliance**: Forwarded discoveryHeaders to id_token JWKS verification fetch ([PR #12179](https://github.com/better-auth/better-auth/pull/12179) — fixes #12151), and enforced fail-closed validation for generic-oauth token responses missing `id_token` ([PR #12163](https://github.com/better-auth/better-auth/pull/12163) — fixes #12153).
- **Grant Family Refresh Token Isolation**: Restructured refresh token reuse detection to invalidate specific grant families rather than globally wiping every client session ([PR #12159](https://github.com/better-auth/better-auth/pull/12159) — fixes #12154).
- **Delete-User Token Ownership Protection**: Prevented token burn when opened by a non-owner session, and added post-consume defense-in-depth verification ([PR #12164](https://github.com/better-auth/better-auth/pull/12164) — fixes #12139).
- **SSO & Custom Cookie Attributes**: Paginated provider & candidate member reads in `listSSOProviders` ([PR #12174](https://github.com/better-auth/better-auth/pull/12174) — fixes #12167), and added `cookieAttributes` configuration to `lastLoginMethod` ([PR #12161](https://github.com/better-auth/better-auth/pull/12161) — fixes #12158).
- **Adapter & Session Hardening**: Enabled default JSON/Array support in Drizzle ([PR #12143](https://github.com/better-auth/better-auth/pull/12143)), prevented Prisma duplicate back-relations ([PR #12137](https://github.com/better-auth/better-auth/pull/12137)), and expired session cookies on user deletion ([PR #12136](https://github.com/better-auth/better-auth/pull/12136)).

### 🦔 **[PostHog](https://github.com/PostHog/posthog)** *(Product Analytics & LLM Observability, YC / GV funded, 26k ⭐)*
- **AutoResearch Safety Model Fallback**: Built resilient fallback handling when Signals safety model returns an empty reply or provider refusal, holding signals for review rather than dropping them ([PR #126803](https://github.com/PostHog/posthog/pull/126803) — fixes #126669).
- **Automated Inactive Inbox Sweep**: Designed team-level configurable background tasks for auto-closing stale signal reports after $N$ days under feature flag gates ([PR #126809](https://github.com/PostHog/posthog/pull/126809) — fixes #126697).
- **AutoResearch Quotas & Limits**: Implemented live pipeline caps ([PR #126792](https://github.com/PostHog/posthog/pull/126792)), daily training run caps ([PR #126772](https://github.com/PostHog/posthog/pull/126772)), and automatic reaping of training runs stranded by lost sandboxes ([PR #126756](https://github.com/PostHog/posthog/pull/126756)).
- **Warehouse Integrations**: Resolved dotted incremental cursor resolution ([PR #124910](https://github.com/PostHog/posthog/pull/124910)), guarded against disconnecting in-use integrations ([PR #124866](https://github.com/PostHog/posthog/pull/124866)), and locked workflow broadcasts once sending ([PR #122903](https://github.com/PostHog/posthog/pull/122903)).

### ⚡ **[Twenty CRM](https://github.com/twentyhq/twenty)** *(Enterprise Open-Source CRM, YC funded, 25k ⭐)*
- **Sign-in Infinite Loader Fix**: Eliminated infinite loading spinner on sign-in page during public workspace resolution ([PR #29316](https://github.com/twentyhq/twenty/pull/29316) — fixes #29254).
- **Apollo GraphQL Optimistic Sorting**: Extended cache manipulation to support multi-criteria secondary `orderBy` optimistic edge sorting ([PR #28744](https://github.com/twentyhq/twenty/pull/28744)).
- **Timeline Activity Diffing**: Prevented diff value hard-truncation and enabled accessible tooltips on long field values ([PR #29198](https://github.com/twentyhq/twenty/pull/29198)).
- **Enterprise Data Sanitation**: Sanitized trailing whitespace on IMAP/SMTP/CalDAV credentials ([PR #29163](https://github.com/twentyhq/twenty/pull/29163) — **MERGED**), and bounded HTML nesting in email imports to prevent RangeError crashes ([PR #29262](https://github.com/twentyhq/twenty/pull/29262)).
- **Core Merges**: Slack unfurl options schema ([PR #29168](https://github.com/twentyhq/twenty/pull/29168) — **MERGED**), code step outputs sync ([PR #28432](https://github.com/twentyhq/twenty/pull/28432) — **MERGED**), record-form error validation ([PR #28425](https://github.com/twentyhq/twenty/pull/28425) — **MERGED** by CTO Charles Bochet), and draft collection hash synchronization ([PR #28412](https://github.com/twentyhq/twenty/pull/28412) — **MERGED** by CEO Félix Malfait).

### 📊 **[Umami](https://github.com/umami-software/umami)** *(Privacy-focused Analytics, 25k+ ⭐)*
- **5 Core Merged PRs**: Retention cohort date timezone shift resolution ([PR #4690](https://github.com/umami-software/umami/pull/4690) — **MERGED**), custom date range `RangeError` crash protection ([PR #4692](https://github.com/umami-software/umami/pull/4692) — **MERGED**), ComboBox controlled state in LookupField wildcard paths ([PR #4696](https://github.com/umami-software/umami/pull/4696) — **MERGED**), visitor count journey step sorting ([PR #4687](https://github.com/umami-software/umami/pull/4687) — **MERGED**), and password change security settings reorganization ([PR #4654](https://github.com/umami-software/umami/pull/4654) — **MERGED**).
- **Tracker & UI Enhancements**: Added responsive page-size picker to data tables ([PR #4725](https://github.com/umami-software/umami/pull/4725) — fixes #4102), and discarded background tab LCP/FCP telemetry to preserve web vitals accuracy ([PR #4724](https://github.com/umami-software/umami/pull/4724) — fixes #4720).

### 💬 **[Chatwoot](https://github.com/chatwoot/chatwoot)** *(Customer Engagement Infrastructure, 23k ⭐)*
- **WhatsApp Cloud Interactive CTA**: Implemented interactive CTA URL button messages for WhatsApp Cloud ([PR #16492](https://github.com/chatwoot/chatwoot/pull/16492) — fixes #16435).
- **Super Admin Z-Index & Demote Option**: Raised selectize dropdown z-index and enabled empty option for demoting user types ([PR #16490](https://github.com/chatwoot/chatwoot/pull/16490) — fixes #16489).
- **Delivery Receipt Race Condition**: Eliminated status regression where WhatsApp Cloud delivery receipts arrived before synchronous HTTP send responses resolved ([PR #16486](https://github.com/chatwoot/chatwoot/pull/16486) — fixes #16351).
- **Snooze Midnight Interpretation**: Resolved command bar parsing for phrases like "night 12" and "midnight" ([PR #16452](https://github.com/chatwoot/chatwoot/pull/16452)).
- **Webhook Storm Prevention**: Prevented alternating error re-send loops on failed external API inboxes ([PR #16413](https://github.com/chatwoot/chatwoot/pull/16413)).
- **Cookie Domain Isolation**: Cleared session cookies with `baseDomain` on SDK reset ([PR #16445](https://github.com/chatwoot/chatwoot/pull/16445)).
- **Voice Draft Persistence**: Resolved voice announcement draft toggle overwrite on unsaved forms ([PR #16428](https://github.com/chatwoot/chatwoot/pull/16428) — **MERGED**).

### 📅 **[Cal.com](https://github.com/calcom/cal.diy)** *(Scheduling Infrastructure, $25M+)*
- **Booking Concurrency & Conflicts**: Surfaced 409 conflict detection for concurrent booking attempts and eliminated millisecond UID collisions ([PR #30375](https://github.com/calcom/cal.diy/pull/30375), [PR #30376](https://github.com/calcom/cal.diy/pull/30376)).
- **DST Boundary Shifts**: Re-evaluated timezone shifts when instant crossings cross daylight saving time boundaries in overlay calendars ([PR #30421](https://github.com/calcom/cal.diy/pull/30421)).
- **Payment & No-Show Fees**: Remounted payments router and wired `chargeCard` mutation in ChargeCardDialog, fixing broken Stripe no-show fee collection ([Issue #30454 Solution](https://github.com/calcom/cal.diy/issues/30454#issuecomment-6531746891)).

### 🔍 **[Langfuse](https://github.com/langfuse/langfuse)** *(LLM Engineering Platform, YC / Lightspeed)*
- **MCP Error Handling Conformance**: Refactored Model Context Protocol (MCP) server tool execution to return errors as valid `isError: true` results adhering to the JSON-RPC standard specification ([PR #19533](https://github.com/langfuse/langfuse/pull/19533) — fixes #19528).
- **Bedrock Cache Write Pricing**: Normalized Bedrock / LangChain ephemeral cache-write tokens into canonical TTL pricing, preventing 20-40% underreported LLM trace costs ([PR #19446](https://github.com/langfuse/langfuse/pull/19446)).

### 🎥 **[Cap](https://github.com/CapSoftware/Cap)** *(High-Performance Screen Recorder, 7.5k ⭐)*
- **Scap Direct3D Frame Pool Stall**: Fixed recording stalls at 0 seconds by comparing in-flight frames to allocated buffer pool size rather than dynamic content dimensions ([PR #3600](https://github.com/CapSoftware/Cap/pull/3600) — fixes #3594).
- **Developer API & Pagination**: Enforced integer coercion and bounds preventing MySQL 500 syntax crashes on negative pagination inputs ([PR #3568](https://github.com/CapSoftware/Cap/pull/3568)).
- **Toolbar Reactions Auth**: Integrated unauthenticated viewer sign-in prompt for reactions ([PR #2977](https://github.com/CapSoftware/Cap/pull/2977) — **MERGED** by founder Richie McIlroy).

### 🤖 **[BasedHardware / Omi](https://github.com/BasedHardware/omi)** & **[Inbox Zero](https://github.com/elie222/inbox-zero)**
- **OMI Wearable Subscription Upgrades**: Unblocked waiting audio transcription pipelines upon subscription plan upgrade and reactivation ([PR #24141](https://github.com/BasedHardware/omi/pull/24141) — **Verified & Approved by Reviewer**).
- **Inbox-Zero Email Preview**: Demanded active mail engine when expanding inline email previews in chat assistant ([PR #4395](https://github.com/elie222/inbox-zero/pull/4395) — **MERGED** by maintainer `@elie222`).

---

## 💼 Featured Enterprise & Client Systems

### 🏢 [TAMAYOZ — Enterprise ERP Web Platform (Crevisoft)](https://github.com/ghazy2001)
*Modular enterprise web client integrated with the Odoo ERP ecosystem.*
- **Tech Stack**: React 19, TypeScript, Vite, Tailwind CSS, Zustand, Framer Motion, Recharts, REST APIs, JSON-RPC.
- **Impact**:
  - Slashed initial page load times by **45% (sub-1.2s LCP)** and achieved **100% WCAG 2.1 AA** compliance via virtualized data grids and keyboard-navigable ARIA primitives.
  - Boosted data visualization render speeds by **50% for 10,000+ records** with a dynamic multi-view rendering engine (Kanban, Gantt, editable tables).
  - Reduced component re-renders by **65%** across nested views with scalable Zustand state slices.

### 🛍️ [STORIA — Full-Stack E-Commerce Engine](https://github.com/ghazy2001)
*Custom commercial e-commerce solution with automated Salla merchant platform integration.*
- **Tech Stack**: React, Node.js, Express.js, MongoDB, REST APIs, Salla Webhooks.
- **Impact**:
  - Increased online checkout completion by **25%** and reduced sync latency by **70%** via automated real-time webhooks.
  - Saved 15+ hours/week of manual operations through automated catalog and inventory synchronization.
  - Achieved sub-200ms API response times and 99.9% uptime with structured MongoDB indexing.

---

## 📈 GitHub Stats

<div align="center">
  <img src="https://github-stats-extended.vercel.app/api?username=ghazy2001&show_icons=true&theme=tokyonight&count_private=true&hide_border=true" alt="Mahmoud Ghazy's GitHub stats" height="165" />
  <img src="https://github-stats-extended.vercel.app/api/top-langs/?username=ghazy2001&layout=compact&theme=tokyonight&hide_border=true" alt="Top Languages" height="165" />
</div>

---

## 🪙 Bounties, Grants & GitHub Sponsors

| Platform / Asset | Network | Link / Address |
|:---:|:---:|---|
| **GitHub Sponsors** | **Official** | [sponsor/@ghazy2001](https://github.com/sponsors/ghazy2001) |
| **USDC** | **Solana (SOL)** | `BaCN1xstTz6ikNi6spW72dHTicDbjZvg82iCpEd2RkSN` |
| **USDT** | **TRON (TRC20)** | `TLXtXNgUQx2mbV2rBRVPrWfgXKLMxvfxYS` |

---

## 📬 Contact & Connect

- 📧 **Email**: [mahmoudghazy2001@gmail.com](mailto:mahmoudghazy2001@gmail.com)
- 💼 **LinkedIn**: [linkedin.com/in/mahmoud-ghazy](https://www.linkedin.com/in/mahmoud-ghazy/)
- 🐙 **GitHub**: [@ghazy2001](https://github.com/ghazy2001)
- 💬 **Discord**: `mahmoudghazy6884`

<div align="center">
  <sub>Full-Stack & Systems Software Engineer • Open for Remote Retainers, Contracts, and Global Engineering Roles</sub>
</div>
