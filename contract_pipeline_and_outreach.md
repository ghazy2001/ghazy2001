# 🎯 خطة تحويل المساهمات إلى عقود عمل ريموت (Contracts & Hiring Funnel)

> [!IMPORTANT]
> وصلنا إلى **33 مساهمة برمجية احترافية (Pull Requests)** عبر 9 من أقوى مشاريع الـ Open-Source العالمية الممولة!
> **إنجاز استثنائي اليوم:** تم دمج PR #28412 رسمياً في **Twenty CRM** بواسطة المؤسس المشارك والـ CTO **Charles Bochet**!

---

## 📊 سابقة الأعمال الحالية (33 PRs عبر 9 شركات عالمية ممولة)

### 1. Twenty CRM (`twentyhq/twenty`) — [5 PRs + ممولة بـ 5M$+ من Y Combinator]
1. [PR #28412](https://github.com/twentyhq/twenty/pull/28412): `fix(metadata-store): adopt new collection hash on replaceDraft when data is unchanged` — **[MERGED 🎉 تم الدمج رسمياً بواسطة المؤسس والـ CTO Charles Bochet]**
- **الكود المنفذ:** حل مشكلة عدم تحديث الـ collection hash في الـ metadata store عند عمل replaceDraft عندما تكون البيانات مطابقة، مما كان يتسبب في عدم مزامنة الحالة مع الـ backend.
2. [PR #28425](https://github.com/twentyhq/twenty/pull/28425): `fix(record-form): block submission when field input has validation error`
3. [PR #28432](https://github.com/twentyhq/twenty/pull/28432): `fix(workflow): preserve logic function outputs and resolve link output schema`
4. [PR #28460](https://github.com/twentyhq/twenty/pull/28460): `fix(record-picker): prevent lost clicks and enable search enter selection in relation picker`
5. [PR #28513](https://github.com/twentyhq/twenty/pull/28513): `fix(record-picker): use ExtraLarge width for one-to-many relation pickers`
- **حالة التواصل:** تم نشر كومنت طلب الكونتراكت الرسمي على [PR #28513](https://github.com/twentyhq/twenty/pull/28513#issuecomment-6317988402) موجهاً لـ Félix Malfait و Charles Bochet.

---

### 2. Cap (`CapSoftware/Cap`) — [9 PRs + بديل Loom الممول من Vercel]
1. [PR #3007](https://github.com/CapSoftware/Cap/pull/3007) & [Issue #2984](https://github.com/CapSoftware/Cap/issues/2984): `fix(extension): mute only microphone audio tracks on mute toggle (#2984)` (Fixes #2984) — **[جديد — كل الفحوصات والتستات خضراء 100%]**
- **الكود المنفذ:** حل مشكلة كتم صوت التاب وصوت النظام (System/Tab Audio) وأصوات الـ Tab Recording بالكامل عند تفعيل زر كتم المايكروفون (Mute Mic) في الـ Chrome Extension. كان `toggle-microphone-mute` يعطل جميع مسارات الصوت في `recording.streams` (بما فيها `mainStream` الحامل لصوت التاب) ويعطل مسار `recordingStream` الصادر للـ `MediaRecorder`. تم تحديث `ActiveRecording` لحفظ مرجع صريح لـ `microphoneStream`، وبناء وحدة `audio-mute.ts` لدالة `setMicrophoneMuted` للتحكم الحصري في مسارات المايكروفون فقط، مع إضافة 4/4 اختبارات Unit Tests في `audio-mute.test.ts` وتوافق Biome كامل بنسبة 100%.
2. [PR #2912](https://github.com/CapSoftware/Cap/pull/2912): `feat(web): add 1.25x playback speed option` (Fixes #2842)
3. [PR #2926](https://github.com/CapSoftware/Cap/pull/2926): `fix(tooling): dedupe .env in turbo.json and drop deprecated --no-cache from dev:manual` (Fixes #2924) — **[MERGED 🎉 بواسطة Richie McIlroy]**
4. [PR #2927](https://github.com/CapSoftware/Cap/pull/2927): `fix(tooling): ignore vinxi timestamp sidecars in .gitignore` (Fixes #2923) — **[MERGED 🎉 بواسطة Richie McIlroy]**
5. [PR #2937](https://github.com/CapSoftware/Cap/pull/2937) & [Issue #2936](https://github.com/CapSoftware/Cap/issues/2936): `fix(web): prevent stale live video snapshot on distant timeline hover (#2936)` (Fixes #2936 / Linear CAP-880)
6. [PR #2974](https://github.com/CapSoftware/Cap/pull/2974) & [Issue #2968](https://github.com/CapSoftware/Cap/issues/2968): `fix(web): preserve numeric captions in VTT transcript parsers (#2968)` (Fixes #2968)
7. [PR #2975](https://github.com/CapSoftware/Cap/pull/2975) & [Issue #2931](https://github.com/CapSoftware/Cap/issues/2931): `fix(web): notify playback store subscribers on duration load while paused (#2931)` (Fixes #2931)
8. [PR #2977](https://github.com/CapSoftware/Cap/pull/2977) & [Issue #2976](https://github.com/CapSoftware/Cap/issues/2976): `fix(web): prompt sign-in overlay when unauthenticated viewer reacts with emoji (#2976)` (Fixes #2976) — **[مراجعة واعتماد Richie McIlroy — جاهز للمرج]**
9. [PR #2988](https://github.com/CapSoftware/Cap/pull/2988): `fix(web): notify subscribers when late fallbackDuration updates playback store` — **[متابعة بطلب ودعوة مباشرة من Richie McIlroy]**

---

### 3. Plane (`makeplane/plane`) — [1 PR جديد + أضخم بديل Jira مفتوح المصدر (35k+ Stars) ممول من OSS Capital و YC]
1. [PR #10105](https://github.com/makeplane/plane/pull/10105): `[GIT-388] fix(utils): parse timestamps in local timezone for renderFormattedDate` (Fixes #10086 / Plane [GIT-388]) — **[CodeRabbit SUCCESS / Merge Risk: Minimal / 14/14 Checks Passed]**
- **الكود المنفذ:** حل مشكلة انحراف التواريخ في الـ Tooltips والعناوين التي تعرض توقيتات كاملة (مثل نشاطات الـ work items، وتعليقات التذاكر، وتاريخ إصدارات الصفحات، وتأجيل الإشعارات، وانتهاء صلاحية مفاتيح الـ API). كان `renderFormattedDate` يستخرج أول 10 حروف فقط من التاريخ عبر `getDate()` (أي تاريخ الـ UTC المجرد)، بينما يستخرج `renderFormattedTime` الوقت بالتوقيت المحلي لمتصفح المستخدم عبر `new Date()`. أدى هذا إلى ظهور تاريخ متأخر أو متقدم يوماً كاملاً عن الوقت الفعلي عند منتصف الليل للمستخدمين خارج نطاق غرينتش. تم تحديث `renderFormattedDate` و `renderFormattedDateWithoutYear` في `@plane/utils` و `apps/space` للتمييز بذكاء بين السلاسل التاريخية المجردة وبين الـ Timestamps الكاملة. تم فحص الكود بـ `oxlint` (0 أخطاء) و `oxfmt` (100% تطابق مع معايير المشروع).

---

### 4. BasedHardware Omi (`BasedHardware/omi`) — [11 PRs باونتي وعقود فورية]
1. [PR #23020](https://github.com/BasedHardware/omi/pull/23020): `fix(chat-sessions): safe chat session deserialization & title validation` (علامة `positive-signal` + `backend`)
2. [PR #23033](https://github.com/BasedHardware/omi/pull/23033): `fix(folders): bulk move deduplication, ID bounds & validation` (علامة `positive-signal` + `backend`)
3. [PR #23047](https://github.com/BasedHardware/omi/pull/23047): `fix(mcp): account for original_text in transcript budget and flag truncation` (Fixes #22806 - تم فحصها بـ 20,000 randomized fuzz test)
4. [PR #23050](https://github.com/BasedHardware/omi/pull/23050): `fix(mcp): index saved description on idempotent action item creation` (Fixes #22843 - علامة `positive-signal` + `backend`)
5. [PR #23286](https://github.com/BasedHardware/omi/pull/23286) & [Issue #23287](https://github.com/BasedHardware/omi/issues/23287): `fix(retrieval): harden create_chart_tool input validation, numeric coercion, and configurable resilience` ($50 proposed bounty - علامة `positive-signal` + `backend`)
6. [PR #23290](https://github.com/BasedHardware/omi/pull/23290) & [Issue #23292](https://github.com/BasedHardware/omi/issues/23292): `fix(retrieval): harden search_files_tool validation, config resilience, and numeric coercion` ($50 proposed bounty - مراجعة إيجابية رسمية من David و 11/11 تست أخضر)
7. [PR #23296](https://github.com/BasedHardware/omi/pull/23296) & [Issue #23297](https://github.com/BasedHardware/omi/issues/23297): `fix(retrieval): harden app_tools schema validation, method normalization, and config extraction` ($50 proposed bounty - مراجعة إيجابية رسمية من David وعلامة `positive-signal`)
8. [PR #23304](https://github.com/BasedHardware/omi/pull/23304) & [Issue #23305](https://github.com/BasedHardware/omi/issues/23305): `fix(retrieval): harden traverse_knowledge_graph_tool validation, hops coercion, and config extraction` ($50 proposed bounty - مراجعة إيجابية رسمية وعلامة `positive-signal`)
9. [PR #23306](https://github.com/BasedHardware/omi/pull/23306) & [Issue #23307](https://github.com/BasedHardware/omi/issues/23307): `fix(retrieval): harden manage_daily_summary_tool validation, hour coercion, and config extraction` ($50 proposed bounty - مراجعة إيجابية رسمية وعلامة `positive-signal`)
10. [PR #23313](https://github.com/BasedHardware/omi/pull/23313): `fix(payment): prevent paid subscriber downgrade when upgrade proration declines (#23301)` (Fixes #23301 - مراجعة رسمية معتمدة من David: "The production fix here is correct and well-tested; 5/5 new and 54/54 existing pass")
11. [PR #23383](https://github.com/BasedHardware/omi/pull/23383): `test(mcp): add multi-segment and none original_text character budget coverage` — **[معتمد رسمياً من David Zhang: "Good follow-up — all three new tests are correct... clean append-only extension"]**

---

### 5. Langfuse (`langfuse/langfuse`) — [1 PR جديد + أضخم منصة LLM Observability ممولة من YC & Lightspeed]
1. [PR #19210](https://github.com/langfuse/langfuse/pull/19210): `fix(web): preserve chat message role titles on non-generation observations (#19198)` (Fixes #19198)

---

### 6. Umami Analytics (`umami-software/umami`) — [2 PRs]
1. [PR #4654](https://github.com/umami-software/umami/pull/4654): `feat(settings): move password change to security settings`
2. [PR #4655](https://github.com/umami-software/umami/pull/4655): `fix(cli): add start-env script alias and sanitize port parsing`

---

### 7. Cal.com / Cal.diy (`calcom/cal.diy`) — [1 PR]
1. [PR #30371](https://github.com/calcom/cal.diy/pull/30371): `fix(auth): support space-delimited OAuth2 scopes in authorize view`

---

### 8. Activepieces (`activepieces/activepieces`) — [2 PRs + تواصل مباشر مع تيم عربي ومصري]
1. [PR #16723](https://github.com/activepieces/activepieces/pull/16723): `fix(connections): support multiple piece filter in project and platform connections` (Fixes #16650)
2. [PR #16780](https://github.com/activepieces/activepieces/pull/16780): `fix(platform): apply date range filter and support optional runIds in admin retry (#16751)` (Fixes #16751)

---

### 9. Medusa (`medusajs/medusa`) — [1 PR جديد + أضخم منصة تجارة إلكترونية مفتوحة المصدر ممولة بـ 16M$ من YC]
1. [PR #17485](https://github.com/medusajs/medusa/pull/17485): `fix(utils): quote camelCase column names in DML index where conditions (#17472)` (Fixes #17472)
